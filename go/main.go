package main

import (
	"encoding/json"
	"fmt"
	"io/ioutil"
	"log"
	"net/http"
)

func main() {
	//url := "https://www.instagram.com/synapsetechsoci/?__a=1"
	//url := "https://www.instagram.com/synapsetechsoci/channel/?__a=1"
	url := "https://www.instagram.com/synapsetechsoci/feed/?__a=1"

	resp, err := http.Get(url)
	if err != nil {
		log.Fatalln(err)
	}
	defer resp.Body.Close()

	body, err := ioutil.ReadAll(resp.Body)
	if err != nil {
		log.Fatalln(err)
	}

	var data map[string]interface{}
	if err := json.Unmarshal(body, &data); err != nil {
		log.Fatalln(err)
	}

	indented, err := json.MarshalIndent(data["graphql"], "", "  ")
	if err != nil {
		log.Fatalln(err)
	}

	fmt.Println(string(indented))
}
