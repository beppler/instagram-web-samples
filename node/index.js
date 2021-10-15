// get node on https://nodejs.org

import fetch from 'node-fetch';

//const url = "https://www.instagram.com/synapsetechsoci/?__a=1"
//const url = "https://www.instagram.com/synapsetechsoci/channel/?__a=1"
const url = "https://www.instagram.com/synapsetechsoci/feed/?__a=1"

const res = await fetch(url);
const json = await res.json();

const user = json?.["graphql"]?.["user"];

console.log(user ?? json);
