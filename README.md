# CrowdSourced Project

This work was created by Georgios Bitsas, a student of the Department of Computer Engineering and Informatics at the University of Patras.

Display of data on a map - administrator. By selecting a range of values, such as year, month (Jan.-Dec.), day (Monday - Sunday), hour (0-23), and activity, the location information of users is displayed on a map screen in the form of points. The administrator can choose a range of values from the above options, such as years (e.g., "2017-2019"), day (e.g., "Saturday - Sunday"), hour (e.g., "20:00 - 23:00"), activity with multiple selections (e.g., "WALKING and STILL"), or choose "all" for a certain criterion. Also, the distribution of user activities is depicted on a graph (percentage of records by activity type).

Data deletion - administrator. By selecting this function and confirming, the system deletes all data in the database.

Data export - administrator. Functions for exporting data from JSON to CSV and XML have been implemented.

User registration. The user registers and gains access to the system by choosing a username & password of their preference and providing their email. The password must be at least 8 characters long and contain at least one uppercase letter, one number, and one symbol (e.g., #$*&@). The system creates a unique identifier (user ID) for each registered user using 2-way encryption, using the user's email and the password as the key. The user's password should then be stored in the database as a hashed value (e.g., MD5).

Display of user information. Immediately after logging into the system, the following are displayed: a. The user's ecological mobility score (percentage of locations with physical activity compared to all mobility activities) for the current month. For example, if there are 100 locations with physical activity and 50 with vehicle activity, the user's score is 100/150 = 66%. Also displayed is a graph showing the user's score for the last 12 months. b. The period covered by the user's records with a graph.

User data analysis. The user selects a time period. The data is displayed in the form of graphs showing the percentage of records by activity type.

Data upload. The user can select a data file to upload to the database.
