# -----:::::----- Operadores relacionales -----:::::-----


num1 = 10
num2 = 20
num3 = 30

''' ______________________________________________________ '''
'''' menor '''
resultado=num1<num2
print(num1," es menor que ",num2,":",resultado)
print(type(resultado))

''' ______________________________________________________ '''
'''' mayor '''
resultado = num1 > num2
print(num1," es mayor que ",num2,":",resultado)
print(type(resultado))

''' ______________________________________________________ '''
'''' igual '''
resultado = num1 == num2
print(num1," es igual a ",num2,":",resultado)
print(type(resultado))

''' ______________________________________________________ '''
'''' diferente '''
resultado = num1 != num2
print(num1," es diferente de ",num2,":",resultado)
print(type(resultado))

''' ______________________________________________________ '''
'''' menor igual '''
resultado = num1 <= num2
print(num1," es menor/igual de ",num2,":",resultado)
print(type(resultado))

''' ______________________________________________________ '''
'''' mayor igual '''
resultado = num1 >= num2
print(num1," es mayor/igual de ",num2,":",resultado)
print(type(resultado))

''' ______________________________________________________ '''
'''' Los operadores aritméticos tienen priaridad por 
encima de los operadores relacionales '''
resultado = num1+num2==num3
print(num1," más ",num2," es igual de ",num3,":",resultado)
print(type(resultado))

