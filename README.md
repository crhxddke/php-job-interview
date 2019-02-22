Opdracht
====

1. maak een nieuwe symfony (4) app
2. maak een REST endpoint waar een JSON request heengestuurd kan worden in de vorm van een zoekopdracht (zie voorbeeld request 1)
3. maak een visit aan op EasyTerra API: https://api-staging.easyterra.com/visits (zie voorbeeld visit POST request 2)
4. gebruik de visit response om vervolgens een quote aan te maken op EasyTerra API: https://api-staging.easyterra.com/quotes (zie voorbeeld request 3). Voorzie de request van headers.
5. geef de quote response en visit response terug in een HTTP response

Pre:
====

- Gebruik services waar mogelijk en leesbare, herbruikbare code
- Nog tijd over: maak een unit test
- Nog tijd over: maak een integratie test

Loop je ergens tegen aan? Laat maar horen!


Voorbeeld request 1:
====

```
{
   "currency":"EUR",
   "pickup": {
     "query":"ams",
     "date":"2019-04-10 10:00:00",
     "countryId":71,
     "cityId":1138,
     "regionId":null,
     "locationId":198
   },
   "dropoff": {
     "query":"ams",
     "date":"2019-04-17 10:00:00",
     "countryId":71,
     "cityId":1138,
     "regionId":null,
     "locationId":198
   }
}
```

Voorbeeld request 2:
====

headers:

```
X-Config-Id: 4
```

```
{
   "config":4,
   "currency":null,
   "landingPage":"https://www.easyterra.nl.staging.easyterra.com/",
   "affiliate":null,
   "gclid":null,
   "referer":null,
   "ipAddress":null,
   "discounts":null
}
```

Voorbeeld request 3:
====

headers:

```
X-Config-Id: 4
X-Visit-Sid: [overnemen uit visit response]
```

```
{
   "currency":"EUR",
   "productType":"cars",
   "filters":{
      "version":"qe-1.0"
   },
   "comparison":[],
   "inheritedFromQuoteSearchId":null,
   "pickupQuery":"ams",
   "pickupDate":"2019-04-10 10:00:00",
   "pickupCountry":71,
   "pickupCity":1138,
   "pickupRegion":null,
   "pickupLocation":198,
   "dropoffQuery":"ams",
   "dropoffDate":"2019-04-17 10:00:00",
   "dropoffCountry":71,
   "dropoffCity":1138,
   "dropoffRegion":null,
   "dropoffLocation":198
}
```

