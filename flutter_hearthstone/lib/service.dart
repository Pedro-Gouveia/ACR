import 'dart:convert';

import 'package:flutter_hearthstone/Card.dart';
import 'package:flutter_hearthstone/globals.dart';
import 'package:http/http.dart';

class Service {
  List<Card> cards = List<Card>();

  Future<void> getCards() async {

    if (this.cards.isNotEmpty) {
      return;
    }

    String route = Globals.apiUrl + "/cards";
    Response response = await get(route, headers: Globals.apiHeaders);

    Map rawData = jsonDecode(response.body);
    List<dynamic> data = rawData['response'];

    cards.clear();

    for(int i = 0; i < data.length; i++)
    {
      Card card = Card(name: data[i]);
      cards.add(card);
    }
  }
}