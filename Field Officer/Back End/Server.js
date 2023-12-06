const express = require('express');
const http = require('http');
const socketIo = require('socket.io');
const mysql = require('mysql2');

const app = express();
const server = http.createServer(app);
const io = socketIo(server);

// Create a MySQL connection pool
const pool = mysql.createPool({
  host: 'localhost',
  user: 'root', // Change to your MySQL username
  password: '', // Change to your MySQL password
  database: 'complainsdb', // Change to your MySQL database name
  waitForConnections: true,
  connectionLimit: 10,
  queueLimit: 0,
});

// Express middleware to parse JSON
app.use(express.json());

// Express route to get assigned complaints
app.get('/api/complaints', (req, res) => {
  // Retrieve complaints from the database
  pool.query('SELECT * FROM complaints', (err, results) => {
    if (err) {
      return res.status(500).json({ error: 'Internal Server Error' });
    }
    res.json(results);
  });
});

// Express route to update complaint status
app.post('/api/update-status', (req, res) => {
  const { id, newStatus } = req.body;

  // Update the status in the database
  pool.query('UPDATE complaints SET status = ? WHERE id = ?', [newStatus, id], (err, results) => {
    if (err) {
      return res.status(500).json({ error: 'Internal Server Error' });
    }

    // Emit a socket event to notify clients about the status update
    io.emit('statusUpdate', { id, status: newStatus });

    res.json({ id, status: newStatus });
  });
});

// Socket.io connection handling
io.on('connection', (socket) => {
  console.log('A user connected');

  // Disconnect event
  socket.on('disconnect', () => {
    console.log('User disconnected');
  });
});

// Start the server
const PORT = process.env.PORT || 3306;
server.listen(PORT, () => {
  console.log(`Server is running on http://localhost:${PORT}`);
});
