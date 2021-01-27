import 'package:flutter/material.dart';
import 'globals.dart';
import 'package:flutter_spinkit/flutter_spinkit.dart';

class Loading extends StatefulWidget {
  @override
  _LoadingState createState() => _LoadingState();

}

class _LoadingState extends State<Loading> {
  Future<void> setupService() async{
    await Globals.service.getCards();
    await Globals.service.getDetails();

    Navigator.pushReplacementNamed(context, Globals.nextRoute);
  }
  @override
  void initState()
  {
    super.initState();
    setupService();
  }

  @override
  Widget build(BuildContext context)
  {
    return Scaffold(
        backgroundColor: Colors.amberAccent[100],
        body: Center(
            child: SpinKitWave(
              color: Colors.redAccent,
              size: 50.0,
            )));
  }
}