import 'package:flutter_hearthstone/service.dart';

class Globals{
  static Service service = Service();
  static String apiUrl = 'https://omgvamp-hearthstone-v1.p.rapidapi.com';
  static Map<String , String> apiHeaders = {
    "x-rapidapi-key": "26a9d638c7msh48bc8305db2f30dp1beff1jsn85ef42fffcce",
    "x-rapidapi-host": "omgvamp-hearthstone-v1.p.rapidapi.com",
    "useQueryString": 'true'
  };
  static String nextRoute = "/Cards";
}