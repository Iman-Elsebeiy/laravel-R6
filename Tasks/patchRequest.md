#
PUT request:is used to update an existing resource or create a new one if it doesn't exist. When you send a PUT request, you provide the full updated resource. If the resource already exists, it gets completely replaced with the new data you sent.
so it's a method of modifying resource where the client sends data that updates the entire resource .
In a PUT request, the enclosed entity is considered to be a modified version of the resource stored on the origin server, and the client is requesting  that the stored version be replaced



PATCH request :is used to make partial updates to an existing resource. When you send a PATCH request, you provide only the changes you want to make, not the entire resource. This is more efficient when you only need to update a few fields.
so it's a method of modifying resources where the client sends partial data that is to be updated without modifying the entire data.                            
http patch method is like a UPDATE query in SQL which sets or updates selected columns only and not the whole row.

So, 'PUT' replaces the whole resource, while PATCH' updates only the parts you specify.