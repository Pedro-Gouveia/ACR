import 'package:flutter/material.dart';
import 'Statistics.dart';

class StatisticsContainer extends StatelessWidget {
  Statistics statistics;

  StatisticsContainer({this.statistics});

  @override
  Widget build(BuildContext context)
  {
    return Container(
      child: Column(
        crossAxisAlignment: CrossAxisAlignment.stretch,
        children: <Widget>[
          Padding(
            padding: const EdgeInsets.all(8.0),
            child: Text(
              "${this.statistics.country} (${this.statistics.continent})",
                  style: TextStyle(
                    fontSize: 22,
                    fontWeight: FontWeight.bold,
                    color: Colors.blueAccent[900]),
            ),
          ),
          SizedBox(
            height: 5,
          ),
          Padding(
              padding: const EdgeInsets.all(8.0),
          child: Text("Populaçao: ${this.statistics.population}",
          style: TextStyle(fontSize: 19,color: Colors.black)),
          ),
          SizedBox(
            height: 20,
          ),
          Padding(
            padding: const EdgeInsets.all(8.0),
            child: Text("${this.statistics.day}",
            style: TextStyle(
              fontSize: 25,
              color: Colors.black,
              fontWeight: FontWeight.bold)),
          ),
          SizedBox(
            height: 20,
          ),
          Padding(
            padding: const EdgeInsets.all(8.0),
            child: Text(
              "Casos Ativos: ${this.statistics.casesActive}" + "(${this.statistics.casesNew})",
              style: TextStyle(fontSize: 18,color: Colors.red)),
            ),
          SizedBox(
            height: 5,
            ),
        Padding(
            padding:const EdgeInsets.all(8.0),
        child: Text("Em estado critico: ${this.statistics.casesCritical}",
  style: TextStyle(fontSize: 18,color: Colors.red)),
        ),
        SizedBox(
          height: 5,
        ),
        Padding(
          padding:const EdgeInsets.all(8.0),
            child:Text("Recuperados: ${this.statistics.casesRecovered}",
            style:TextStyle(fontSize: 18, color: Colors.green)),
          ),
          SizedBox(height: 5,
          ),
          Padding(
              padding:const EdgeInsets.all(8.0),
            child: Text(
              "Mortes: ${this.statistics.deathsTotal}" +
                "(${this.statistics.deathsNew})",
              style: TextStyle(fontSize: 18,color: Colors.red)),
            ),
          SizedBox(
            height: 5,
          ),
        ],
      ));
  }
}