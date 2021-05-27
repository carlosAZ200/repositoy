# -----:::::----- Operadores lógicos -----:::::-----

''' ______________________________________________________ '''
'''' orden de ejecución 

()
**
*, /, //, mod o %, not
+, -, and
>,<,==,>=,<=,!=, or
'''

''' ______________________________________________________ '''
''''
falso AND falso = falso  
falso AND verdadero = falso  
verdadero AND falso = falso  
verdadero AND verdadero = verdadero  

0 * 0 = 0
0 * 1 = 0
1 * 0 = 0
1 * 1 = 1
'''
''' ______________________________________________________ '''
'''' 
falso OR falso = falso  
falso OR verdadero = verdadero
verdadero OR falso = verdadero
verdadero OR verdadero = verdadero  

(0 + 0) / (0 + 0) = 0
(0 + 1) / (0 + 1) = 1
(1 + 0) / (1 + 0) = 1
(1 + 1) / (1 + 1) = 1
'''
''' ______________________________________________________ '''
'''' 
not falso = verdadero
not verdadero = falso
''' 
a = 10
b = 15
c = 20 
resultado = ((a<b) and (b<c))
print(a<b, " and ", b<c, " = ", resultado)
print(type(resultado))

resultado = ((a>b) and (b<c))
print(a<b, " and ", b<c, " = ", resultado)
print(type(resultado))

resultado = ((a>b) or (b<c))
print(a>b, " or ", b<c, " = ", resultado)
print(type(resultado))

resultadoNegado = not resultado
print("Not", resultado , " = ", resultadoNegado)
print(type(resultado))