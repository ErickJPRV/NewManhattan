import express from 'express';
import logger from 'morgan';
import { Server } from 'socket.io';
import { createServer } from 'http';

const port = process.env.PORT ?? 3000;

const app = express();
const server = createServer(app);
const io = new Server(server, {
  connectionStateRecovery: {}
});


io.on('connection', async (socket) => {
    console.log('a user has connected');
  
    socket.on('disconnect', () => {
      console.log('a user has disconnected');
    });
  
    socket.on('chat', async (msg) => {
        io.emit('chat', msg);
    });
});
app.get('/', (req, res) => {
  res.sendFile(process.cwd() + '/Interfaz/Index.html');
});

server.listen(port, () => {
  console.log(`Server running on port ${port}`);
});
