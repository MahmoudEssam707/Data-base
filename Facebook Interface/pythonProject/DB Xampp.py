import mysql.connector
import pandas as pd
# Create a connection object
conn = mysql.connector.connect(
    host="localhost",  # XAMPP default host
    user="root",       # XAMPP default MySQL user
    password="",       # XAMPP default MySQL password
    database="Name of Database"  # Name of your database in XAMPP
)

# Verify if the connection is successful
action = conn.cursor()
action.execute("SELECT * FROM employees")
rows = action.fetchall()
Data = pd.DataFrame(rows,columns=action.column_names)
print(Data)