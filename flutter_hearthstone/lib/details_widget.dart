import 'package:flutter/material.dart';
import 'package:flutter_hearthstone/Details.dart';

class DetailsWidget extends StatelessWidget {
  final Details details;

  DetailsWidget({
    this.details
  });
  
  @override
  Widget build(BuildContext context)
  {
    return Container(
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.stretch,
          children: <Widget>[
            Expanded (child: Image.network("${this.details.img}"))
            ,
            SizedBox(height: 5,
            ),
            Padding(
              padding: const EdgeInsets.all(8.0),
              child: Text("Card ID: ${this.details.cardId}",
                  style: TextStyle(
                      fontSize: 14,
                      color: Colors.black
                  )),
            ),
            SizedBox(
              height: 5,
            ),
            Padding(
              padding: const EdgeInsets.all(8.0),
              child: Text("Set: ${this.details.cardSet}",
                  style: TextStyle(
                      fontSize: 24,
                      color: Colors.black
                  )),
            ),
            SizedBox(
              height: 5,
            ),
            Padding(
              padding: const EdgeInsets.all(8.0),
              child: Text("Type: ${this.details.type}",
                  style: TextStyle(
                      fontSize: 24,
                      color: Colors.black
                  )),
            ),
            SizedBox(
              height: 5,
            ),
            Padding(
              padding:const EdgeInsets.all(8.0),
              child:Text("Class: ${this.details.playerClass}",
                  style:TextStyle(fontSize: 24,
                      color: Colors.black
                  )),
            ),
            SizedBox(height: 5,
            ),
          ],
        ));
  }
}