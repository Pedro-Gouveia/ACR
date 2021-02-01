import 'dart:convert';

import 'package:flutter_hearthstone/HSCard.dart';
import 'package:flutter_hearthstone/Details.dart';
import 'package:flutter_hearthstone/globals.dart';
import 'package:http/http.dart';

class Service {
  List<HSCard> hsCards = List<HSCard>();
  Details details;
  HSCard selectedCard;


  Future<void> getCards() async {

    if (this.hsCards.isNotEmpty) {
      return;
    }

    String route = Globals.apiUrl + "/cards?collectible=1";
    Response response = await get(route, headers: Globals.apiHeaders);

    Map rawData = jsonDecode(response.body);
    List<dynamic> data = rawData["Hall of Fame"];

    hsCards.clear();

    for(int i = 0; i < data.length; i++)
    {
      HSCard hsCard = HSCard(name: data[i]["name"]);
      hsCards.add(hsCard);
    }
  }

  /*
  String removeTags(text){
    String str = "";
    if (text != null) {
      for (int i = 0; i < text.length; i++) {
        if (text[i] != '<') {
          str += text[i];
        } else {
          while (text[i] != '>') {
            i++;
          }
        }
      }
      return str;
    }
    return str = "This card has no ability.";
  }
  */

  Future<void> getDetails() async {

    if (this.selectedCard == null) {
      return;
    }

    String route = Globals.apiUrl + "/cards/" + this.selectedCard.name;
    Response response = await get(route, headers: Globals.apiHeaders);

    List<dynamic> rawData = jsonDecode(response.body);

    Map detailsData = rawData[0];

    this.details = Details(
        cardId: detailsData['cardId'],
        cardSet: detailsData['cardSet'],
        type: detailsData['type'],
        //text: removeTags(detailsData['text']),
        playerClass: detailsData['playerClass'],
        img: detailsData['img']
    );
  }

}