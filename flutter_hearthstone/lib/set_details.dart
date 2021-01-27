import 'package:flutter/material.dart';
import 'package:flutter_hearthstone/details_widget.dart';
import 'package:flutter_hearthstone/globals.dart';

class SetDetails extends StatefulWidget {
  @override
  _SetDetails createState() => _SetDetails();

}

class _SetDetails extends State<SetDetails> {
  @override
  Widget build(BuildContext context) {

    return Scaffold(
      backgroundColor: Colors.amberAccent[100],
      appBar: AppBar(
        title: Text("Card Details"),
        backgroundColor: Colors.black87,
      ),
      body: Column(
        children: <Widget>[
          Expanded(
              child:
              DetailsWidget(details: Globals.service.details))
        ],
      ),
    );
  }
}