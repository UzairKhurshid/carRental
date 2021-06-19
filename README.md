require('dotenv').config()
require('./db/index')
const express=require('express')
const http = require('http')
const socketio = require('socket.io')
const bodyParser=require('body-parser')
const path=require('path')
var cors = require('cors')
const hbs=require('hbs')

const app=express()
const server = http.createServer(app)
const io = socketio(server)
const PORT=process.env.PORT || 3000


const publicDirectory=path.join(__dirname,'../public')
const viewsDirectory=path.join(__dirname,'../views')

app.set('view engine', 'hbs');
app.set('views',viewsDirectory)
app.use(express.static(publicDirectory))

app.use(cors())
app.use(bodyParser.urlencoded({ extended: false }))
app.use(bodyParser.json())
app.use(express.static(path.join(__dirname,'../../public')));



