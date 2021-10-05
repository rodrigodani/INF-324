# -*- coding: utf-8 -*-
"""
Created on Mon Oct  4 04:25:10 2021

@author: USUARIO
"""

import pymysql

db = pymysql.connect(host='localhost',user='root', password='',database='bdcori')

cursor = db.cursor()

# ejecuta el SQL query usando el metodo execute().
sql = "INSERT INTO persona(nombre, ci, fecha_nac, cod_depart) \
   VALUES ('{0}','{1}','{2}','{3}')".format('cori', '123456', '27/6/1991', '05')
try:
   # Execute the SQL command
   cursor.execute(sql)
   # Commit your changes in the database
   db.commit()
except:
   # Rollback in case there is any error
   db.rollback()

sql = "INSERT INTO persona(nombre, ci, fecha_nac, cod_depart) \
   VALUES ('{0}','{1}','{2}','{3}')".format('galvez', '1124', '27/6/1991', '01')
try:
   # Execute the SQL command
   cursor.execute(sql)
   # Commit your changes in the database
   db.commit()
except:
   # Rollback in case there is any error
   db.rollback()
   
sql = "INSERT INTO estudiante(id_persona, carrera) \
   VALUES ('{0}','{1}')".format(29, 'informatica')
try:
   # Execute the SQL command
   cursor.execute(sql)
   # Commit your changes in the database
   db.commit()
except:
   # Rollback in case there is any error
   db.rollback()

sql = "INSERT INTO estudiante(id_persona, carrera) \
   VALUES ('{0}','{1}')".format(30, 'informatica')
try:
   # Execute the SQL command
   cursor.execute(sql)
   # Commit your changes in the database
   db.commit()
except:
   # Rollback in case there is any error
   db.rollback()   
   
   
   
   
   
   
   
   
   
# desconectar del servidor
db.close()

