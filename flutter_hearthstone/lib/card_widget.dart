import 'package:flutter_hearthstone/HSCard.dart';
import 'package:flutter/material.dart';

class CardWidget extends StatelessWidget {
  final HSCard hsCard;
  final Function showDetails;

  CardWidget({
    this.hsCard,
    this.showDetails
  });

  @override
  Widget build(BuildContext context) {
    return Card(
      margin: EdgeInsets.all(4),
      color: Colors.amberAccent[100],
      child: ListTile(
        title: Text(this.hsCard.name,
            style: TextStyle(
            fontSize: 24,
            color: Colors.black),
        ),
        onTap: showDetails
      ),

    );
  }


}