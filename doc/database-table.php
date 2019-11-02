############ Manager in Admin Starts ############
1. Admin Table

 Table Name : admins
	- id
	- full_name
	- username
	- email
	- email_verified_at
	- password
	- remember_token
	- profile_pic
	- status (active : 0 & inactive : 1)
	- created_at
	- updated_at

2. Table Name : testimonials (Main Page)

 

	- id
	- author (user after successfull deal will provide feedback)
	- designation
	- description
	- image
	- status (0 - active , 1 - inactive)
	- created_at
	- updated_at



3. Manage Banner

Table Name : bannercategories
	- id
	- title (unique)
	- status (default : 0 & deleted : 1)
	- sort_order (int)
	- created_at
	- updated_at


Table Name : bannerimages
	- id
	- title
	- url
	- description
	- image
	- status (default : 0 & deleted : 1)
	- sort_order (int)
	- created_at
	- updated_at





4.  Manage cargo categories

Table Name : categories
	- id
	- title
	- slug
	- description
	- banner
	- status (active : 0 & inactive : 1)
	- created_at
	- updated_at

5. Table for FAQ Page

	Table Name : faqs

	- id
	- heading
	- description
	- is_carrierShipper (0 - Carrier, 1 - Shipper)
 	- status (0 - active , 1 - inactive)
	- created_at
	- updated_at


 


6. Table for Advertising Page

	Table Name : advertisments

	- id
	- title
	- meta_tags
	- meta_description
	- heading
	- description
	- slug
	- status (0 - active , 1 - inactive)
	- created_at
	- updated_at




7. Table for About Page

	Table Name : abouts

	- id
	- title
	- meta_tags
	- meta_description
	- slug
	- heading
	- description
	- status (0 - active , 1 - inactive)
	- created_at
	- updated_at


8. Table Name : histories

	- id
	- title
	- meta_tags
	- meta_description
	- slug
	- heading
	- description
	- status (0 - active , 1 - inactive)
	- created_at
	- updated_at


9. Table Name : philosphies

	- id
	- title
	- meta_tags
	- meta_description
	- slug
	- heading
	- description
	- status (0 - active , 1 - inactive)
	- created_at
	- updated_at

10. Table Name : carriers

	- id
	- title
	- meta_tags
	- meta_description
	- heading
	- description
	- slug
	- status (0 - active , 1 - inactive)
	- created_at
	- updated_at




11. Table Name : shippers

	- id
	- title
	- meta_tags
	- meta_description
	- heading
	- description
	- slug
	- status (0 - active , 1 - inactive)
	- created_at
	- updated_at


 12. Table Name : privacy_policies

	- id
	- title
	- meta_tags
	- meta_description
	- heading
	- description
	- slug
	- status (0 - active , 1 - inactive)
	- created_at
	- updated_at


13. Table Name : terms_conditions

	- id
	- title
	- meta_tags
	- meta_description
	- heading
	- description
	- slug
	- status (0 - active , 1 - inactive)
	- created_at
	- updated_at




14. Table Name : subscription_planns (Cachier Package will be used for all subscription management)
	- id
	- is_carrier (0 - no, 1 - yes)
	- is_shipper (0 - no, 1 - yes)
	- icon (Get Quotes or Find Trucks)
	- heading (Get Quotes or Find Trucks)
	- time_slot (in month)
	- currency
	- price 
	- tag (e.g Popular, Free etc.)
	- status (active : 0 & inactive : 1)
	- created_at
	- updated_at




1. User Table

Table Name : users
	- id
	- user_role (carrier : 0 & shippers : 1)
	- username
	- email
	- email_verified_at
	- password
	- remember_token
	- profile_pic
	- company_name
	- contact_name
	- company_category_id
	- company_abn 
	- email_alert (0 - off 1 - on )
	- mobile_alert (0 - off 1 - on )
    - loadshift_check  (No : 0 & Yes : 1)
    - status (default : 0 & deleted : 1)
	- created_at
	- updated_at

2. Table Name : track_users

	- id 
	- user_id
	- system_ip	
	- status (active : 0 & inactive : 1)
	- created_at
	- updated_at


3. Table Name : address_users

	- id 
	- user_id
	- street_address
	- street_suburb
	- street_state
	- street_postcode
	- is_same (0 - no  & 1 - yes)
	- postal_address
	- postal_suburb
	- postal_state
	- postal_postcode
	- contact_details_phone
	- contact_details_mobile
	- contact_details_email
	- longitude
	- latitude (So that we can find the ip for free users in order to restrict them based on their location & system ip)
	- alert_status (0 - off & 1 - on) 
	- notification_email 
	- status (active : 0 & inactive : 1)
	- created_at
	- updated_at

 
 

4. Table Name : company_service_users

	- user_id
	- company_service_id 


5. Table Name : company_category_users

	- user_id
	- company_category_id 

6. Table Name : company_services

	- id 
	- title (Flat Top, Retriever, Step Deck	, Livestock, Float, Tanker, Tautliner, Tilt Tray, Road Train, Crane Truck, B-Double, Refrigeration, Dolly, Extendible, Escort, Other, Tipper
)
	- status (active : 0 & inactive : 1)
	- created_at
	- updated_at

7. Table Name : company_categories

	- id 
	- title (Owner/driver , Fleet owner, Freight Forwarder)
	- status (active : 0 & inactive : 1)
	- created_at
	- updated_at


8. Table Name : truck_types

	- id 
	- title (PRIME MOVER , RIGID FLATTOP, CRANE TRUCK, RIGID PANTECH, TILT TRAY, RETREVIER TOWTRUCK, RIGID BEAVERTAIL, RIGID WITH TAILGATOR)
	- status (active : 0 & inactive : 1)
	- created_at
	- updated_at



9. Table Name : user_trucks

	- id 
	- user_id
	- truck_type_id 
	- truck_qty  (0 to 20 )
	- status (active : 0 & inactive : 1)
	- created_at
	- updated_at


10. Table Name : trailor_types

	- id 
	- title (FLAT TOP , DOG TRAILER, DROP DECK, EXTENDABLE, CAR CARRIER, GRAIN TRAILER, CURTAINSIDER, HORSE TRAILER/FLOAT, DOLLY, LIVESTOCK, LOW LOADER, LOGGING, REFRIDGERATED, PIG TRAILERS, SIDE LOADER, POLE JINKER, SKEL, SIDE TIPPER, TILT DECK, TANKER, PLATFORM, TIPPER, WALKING FLOOR)
	- status (active : 0 & inactive : 1)
	- created_at
	- updated_at

11. Table Name : user_trailors

	- id 
	- user_id
	- trailor_type_id 
	- trailor_qty  (0 to 20 )
	- status (active : 0 & inactive : 1)
	- created_at
	- updated_at


12. Table Name : configuration_types

	- id 
	- title (B-DOUBLE , ROAD TRAINS)
	- status (active : 0 & inactive : 1)
	- created_at
	- updated_at

13. Table Name : user_configurations

	- id 
	- user_id
	- configuration_type_id 
	- configuration_qty  (0 to 20 )
	- status (active : 0 & inactive : 1)
	- created_at
	- updated_at

14. Table Name : other_detail_types

	- id 
	- title (PILOT , HOTSHOT, DEPOT FACILITIES UTE, TRADE PLATES, BOBTAIL OPERATOR, DRIVER HIRE)
	- status (active : 0 & inactive : 1)
	- created_at
	- updated_at



15. Table Name : user_other_details

	- id 
	- user_id
	- other_detail_type_id 
	- other_qty  (0 to 20 )
	- status (active : 0 & inactive : 1)
	- created_at
	- updated_at

16. Table Name : user_notifications

	- id 
	- user_id
	- category_id 
	- is_email  (0 - false 1 - true)
	- is_mobile  (0 - false 1 - true)
	- status (active : 0 & inactive : 1)
	- created_at
	- updated_at



17. Table Name : states

	- id 
	- title (ACT , NSW, NT, QLD, SA, TAS, VIC, WA)
	- status (active : 0 & inactive : 1)
	- created_at
	- updated_at

18. Table Name : user_states

	- id 
	- user_id
	- state_id 
	- pick_up_state  (0 - false 1 - true)
	- delivery_state  (0 - false 1 - true)
	- created_at
	- updated_at



19. Account settings
	
 Table Name : settings	
	- id
	- logo
	- favicon
	- meta_data  
	- meta_data_description
	- status (active : 0 & inactive : 1)
	- created_at
	- updated_at





############ Manager in Admin Ends ############












 







 
















28. Get Quotes Table

Table Name : user_quotes
	- id
	- user_id
	- pickup_location
	- delivery_location
	- cargo_description
	- cargo_type_id
	- model_name
	- qty
	- availability
	- availability_from_date
	- measurements_length
	- measurements_width
	- measurements_height
	- measurements_weight
	- user_comment
	- job_expiry_date


	check if email already exist get its user_id else create new user_id and then store only user_id
	---------------------------------------
	- company_name
	- contact_name
	- phone
	- mobile
	- email
	- password (if email does not already exist then let user cretae easy password)
	----------------------------------------


	- status (active : 0 & inactive : 1)
	- created_at
	- updated_at



29. Table for Member Document Verification

	Table Name : company_details
	- id
	- user_id
	- company_name
	- company_description
	- company_doc
	- verification_status (0 - pending , 1 - approved, 2 - rejected)
	- status (0 - active , 1 - inactive)
	- created_at
	- updated_at


30. Table for Member Document Verification

	Table Name : license_drivers
	- id
	- user_id
	- license_doc
	- license_no
	- license_state
	- license_expiry
	- verification_status (0 - pending , 1 - approved, 2 - rejected)
	- status (0 - active , 1 - inactive)
	- created_at
	- updated_at


31. Table for Cargo Insurance Policy  Verification

	Table Name : cargo_insurance_policy
	- id
	- user_id
	- scanned_doc
	- insurance_issuer
	- policy_no
	- sum_insured_for
	- expiry_date
	- verification_status (0 - pending , 1 - approved, 2 - rejected)
	- status (0 - active , 1 - inactive)
	- created_at
	- updated_at

32. Table for Business Address Document Verification

	Table Name : business_address_docs
	- id
	- user_id
	- scanned_doc
	- street_name
	- suburb
	- state
	- postcode
	- expiry_date
	- verification_status (0 - pending , 1 - approved, 2 - rejected)
	- status (0 - active , 1 - inactive)
	- created_at
	- updated_at








44. Table for Quotes Status

	Table Name : quotation_status
	- id
	- user_quote_id
	- user_id (who approves quotation)
	- member_id (who send quotation to user)
	- quotation_price
	- status_quotes (0 - pending , 1 - accept , 2 - reject, 3 - negotiate 4 - resubmit )
	- negotiation_comment ( from user in case he want to negotiate with member)
	- status (0 - active , 1 - inactive)
	- created_at
	- updated_at



45. Table for Truck Register

	Table Name : trucks
	- id
	- user_id
	- company_name
	- contact_name
	- phone
	- email
	- suburb
	- state
	- date_start_availibility (will be valid upto 48 hours)
	- truck_trailor_type
	- max_width (default : null for all) 
	- max_length (default : null for all) 
	- max_weight (default : null for all)
	- comment
	- validity_status (0 - pending, 1 - valid,  2 - outdated)
	- status (0 - active , 1 - inactive)
	- created_at
	- updated_at




46. Table for Advertisment posted by Prime Member


	Table Name : advertisements
	- id
	- user_id
	- title
	- banner
	- ad_type (0 - sale, 1 - want, 2 - rent)
	- qty
	- unit_price
	- location
	- listing_no (unique no generated)
	- detailed_description
	- ad_status (0 - pending, 1 - valid,  2 - expired)
	- status (0 - active , 1 - inactive)
	- created_at (Listed on (Date and timestamp))
	- updated_at


47. Table Name - ad_enquiry
	- id
	- advertisement_id
	- listing_no
	- full_name
	- email
	- contact_no
	- status (0 - active , 1 - inactive)
	- created_at
	- updated_at




48.	Table Name - sale_range
	- id
	- price_range
	- status (0 - active , 1 - inactive)
	- created_at
	- updated_at




49.	Table Name - sale_range_plans
	- id
	- sale_range_id
	- plan_name
	- sub_title
	- heading
	- description
	- status (0 - active , 1 - inactive)
	- created_at
	- updated_at



   

