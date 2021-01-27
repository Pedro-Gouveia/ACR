import 'package:flutter/material.dart';
import 'package:flutter_hearthstone/HSCard.dart';
import 'package:flutter_hearthstone/card_widget.dart';
import 'package:flutter_hearthstone/globals.dart';

class SetCard extends StatefulWidget {
  @override
  _SetCardState createState() => _SetCardState();

}

class _SetCardState extends State<SetCard> {
  Future<void> showDetails(HSCard hsCard) async {
    Globals.service.selectedCard = hsCard;
    await Globals.service.getDetails();

    Navigator.pushNamed(context, "/LoadDetails");
  }

  @override
  Widget build(BuildContext context)
  {
    return Scaffold(
      backgroundColor: Colors.orangeAccent[100],
      appBar: AppBar(
        title: Text("Hearthstone - Hall of Fame"),
        backgroundColor: Colors.black87,
      ),
      body: Column(
        children: <Widget>[
          Expanded(
              child: ListView.builder(
                itemCount: Globals.service.hsCards.length,
                itemBuilder: (context, index)=> CardWidget(
                    hsCard: Globals.service.hsCards[index],
                    showDetails: (){
                      this.showDetails(Globals.service.hsCards[index]);
                    }),
              )),
        ],
      ),
    );
  }
}