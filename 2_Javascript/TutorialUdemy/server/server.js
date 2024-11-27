const express = require("express");
const app = express();


app.get("/", (req, res) => {
    const user = {
        firstName: 'io',
        lastName:'Sempre io',
        age:49,
        marrider:true,
        address:{
            street:'Boh una via a caso',
            city:'Piacenza',
        },
        children : ['ciao','ciao2'],
    }
  res.json(user);
});

app.post('/', async(req,resp) => {
    console.log(req.query, req.body)
    return req.body;
});

app.listen(3000, () => {
  console.log("Server avviato su http://localhost:3000");
});
