JORUM Rest API  - Staging Server PHP Wrapper v0.9.0 
=====
Petros Diveris 
-----
History 
Build 8141df8: fixed to XML output  
Build 77c5f77: Refactored code to follow PSR-1 coding style  
Build 3715b3e: fixed limit/offset issue reported by Rob Tice  
Build 18b9a93: Added /handles API call  
  
All calls are HTTP GET requests currently with no authentication, although OAuth might  be introduced in version 1.0.  
  
All calls are simple HTTP GET requests. Where you see .json you can substitute with .xml, .php and .html. The php format is simply a var_dump of the native php object for debugging purposes whereas html produces a “pretty” output with clickable links to the various expandable attributes, as well as the bitstreams which should display natively.  
  
Items
-----
http://jorumbeta.mimas.ac.uk/items.json  
http://jorumbeta.mimas.ac.uk/items.json?expand=metadata  
http://jorumbeta.mimas.ac.uk/items.json?expand=parentCollection  
http://jorumbeta.mimas.ac.uk/items.json?expand=bitstreams  
http://jorumbeta.mimas.ac.uk/items.json?expand=parentCommunityList  
http://jorumbeta.mimas.ac.uk/items.json?expand=all  
  
A limit and offset can be passed when listing entries (mainly items) so a call for items (see below) could be refined as follows:
  
http://jorumbeta.mimas.ac.uk/items.json?limit=3&offset=8  
  
Single Item
-----
http://jorumbeta.mimas.ac.uk/items.json/10949/8894 
http://jorumbeta.mimas.ac.uk/items.json/10949/8894?expand=bitstreams  
http://jorumbeta.mimas.ac.uk/items.json/10949/8894?expand=metadata  
http://jorumbeta.mimas.ac.uk/items.json/10949/8894?expand=parentCollection
http://jorumbeta.mimas.ac.uk/items.json/10949/8894?expand=parentCollectionList
http://jorumbeta.mimas.ac.uk/items.json/10949/8894?expand=parentCommunityList


Collections
-----
http://jorumbeta.mimas.ac.uk/collections.json  
http://jorumbeta.mimas.ac.uk/collections.json?expand=parentCommunityList  
http://jorumbeta.mimas.ac.uk/collections.json?expand=parentCommunity  
http://jorumbeta.mimas.ac.uk/collections.json?expand=items  
http://jorumbeta.mimas.ac.uk/collections.json?expand=license  
http://jorumbeta.mimas.ac.uk/collections.json?expand=all  

Single Collection
-----
http://jorumbeta.mimas.ac.uk/collections.json/57  
http://jorumbeta.mimas.ac.uk/collections.json/57?expand=parentCommunityList  
http://jorumbeta.mimas.ac.uk/collections.json/57?expand=parentCommunity  
http://jorumbeta.mimas.ac.uk/collections.json/57?expand=items  
http://jorumbeta.mimas.ac.uk/collections.json/57?expand=license  
http://jorumbeta.mimas.ac.uk/collections.json/57?expand=all  

Communities
-----
http://jorumbeta.mimas.ac.uk/communities.json  
http://jorumbeta.mimas.ac.uk/communities.json?expand=parentCommunity  
http://jorumbeta.mimas.ac.uk/communities.json?expand=collections  
http://jorumbeta.mimas.ac.uk/communities.json?expand=subCommunities  
http://jorumbeta.mimas.ac.uk/communities.json?expand=logo  
http://jorumbeta.mimas.ac.uk/communities.json?expand=all  
  
Single Community
-----
http://jorumbeta.mimas.ac.uk/communities.json/10949/25  
http://jorumbeta.mimas.ac.uk/communities.json/10949/25?expand=parentCommunity  
http://jorumbeta.mimas.ac.uk/communities.json/10949/25?expand=collections  
http://jorumbeta.mimas.ac.uk/communities.json/10949/25?expand=subCommunities  
http://jorumbeta.mimas.ac.uk/communities.json/10949/25?expand=logo  
http://jorumbeta.mimas.ac.uk/communities.json/10949/25?expand=all  

Bitstreams  
-----
http://jorumbeta.mimas.ac.uk/bitstreams.html/150891/retrieve  
http://jorumbeta.mimas.ac.uk/bitstreams.html/150891  
