Hairdressing Training Rest API version 0.9.0 - Staging Server

All calls are HTTP GET requests currently with no authentication, although OAuth might  be introduced in version 1.0.

The request needs to specify the output format e.g .json | .xml | .html. In addition, pagination is now supported by means of specifying offset and limit, e.g.

http://api.hairdressing.ac.uk/ht/items.json?offset=10&limit=20

List of valid IDs (handles)
http://api.hairdressing.ac.uk/ht/items.json/handles
http://api.hairdressing.ac.uk/ht/communities.json/handles
http://api.hairdressing.ac.uk/ht/collections.json/handles

List of Resources
http://api.hairdressing.ac.uk/ht/items.json
http://api.hairdressing.ac.uk/ht/items.json?expand=metadata
http://api.hairdressing.ac.uk/ht/items.json?expand=parentCollection
http://api.hairdressing.ac.uk/ht/items.json?expand=metadata,parentCollection

Individual Resources (In this instance single items.json such as ‘Step by Step Guides’, a video, a presentation etc.)
http://api.hairdressing.ac.uk/ht/items.json/22
http://api.hairdressing.ac.uk/ht/items.json/22?expand=metadata
http://api.hairdressing.ac.uk/ht/items.json/22?expand=parentCollection
http://api.hairdressing.ac.uk/ht/items.json/22?expand=metadata,parentCollection

List of collections.json (Grouped items.json. In this instance the second level menu entries e.g. ‘Graduated Bob’, ‘Layered Bob’ etc)
http://api.hairdressing.ac.uk/ht/collections.json
http://api.hairdressing.ac.uk/ht/collections.json?expand=metadata (0.9.1)
http://api.hairdressing.ac.uk/ht/collections.json?expand=parentCommunity (0.9.1)
http://api.hairdressing.ac.uk/ht/collections.json?expand=license (not supported)
http://api.hairdressing.ac.uk/ht/collections.json?expand=items.json (not supported)
http://api.hairdressing.ac.uk/ht/collections.json?expand=items.json (not supported)
http://api.hairdressing.ac.uk/ht/collections.json?expand=all (0.9.2)

Individual collections.json 
http://api.hairdressing.ac.uk/ht/collections.json/510
http://api.hairdressing.ac.uk/ht/collections.json/510?expand=metadata
http://api.hairdressing.ac.uk/ht/collections.json/510?expand=ParentCommunity (0.9.1)
http://api.hairdressing.ac.uk/ht/collections.json/510?expand=all (0.9.2)

communities.json (sort of a collection of collections.json, in this instance the top menu items.json of the the Hairdressing Training website, e.g. ‘Get Started’, ‘Male Cuts’ etc).
http://api.hairdressing.ac.uk/ht/communities.json
http://api.hairdressing.ac.uk/ht/communities.json?expand=metadata
http://api.hairdressing.ac.uk/ht/communities.json?expand=collections (0.9.1)
http://api.hairdressing.ac.uk/ht/communities.json?expand=all (0.9.2)

Individual communities.json
http://api.hairdressing.ac.uk/ht/communities.json/1
http://api.hairdressing.ac.uk/ht/communities.json/1?expand=metadata (0.9.1)
http://api.hairdressing.ac.uk/ht/communities.json/1?expand=collections (0.9.2)
http://api.hairdressing.ac.uk/ht/communities.json/1?expand=all (0.9.2)

