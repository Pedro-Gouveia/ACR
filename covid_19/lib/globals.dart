import 'package:covid_19/c19service.dart';

class Globals{
  static C19Service service = C19Service();
  static String apiUrl = 'https://covid-193.p.rapidapi.com';
  static Map<String , String> apiHeaders = {
    "x-rapidapi-key": "7235032b9cmshf8812184964ab9ep10a961jsnea081297e0fb",
    "x-rapidapi-host": "covid-193.p.rapidapi.com",
    "useQueryString": 'true'
  };
  static String nextRoute = "/Countries";
}