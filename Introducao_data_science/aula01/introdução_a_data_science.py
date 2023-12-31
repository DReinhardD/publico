# -*- coding: utf-8 -*-
"""Introdução a data Science.ipynb

Automatically generated by Colaboratory.

Original file is located at
    https://colab.research.google.com/drive/1Sa_72qY_cWquQ-H-fuBG-9l12VGzumG7
"""

import pandas as pd

notas = pd.read_csv("ratings.csv")
notas.head()

notas.shape

notas.columns = ["usuarioId", "filmeId", "nota", "momento"]
notas.head()

notas['nota']

notas['nota'].unique()

notas['nota'].value_counts()

print("Média",notas['nota'].mean())
print("Mediana",notas['nota'].median())

notas.nota.head()

notas.nota.plot(kind='hist')

notas.nota.describe()

import seaborn as sns

sns.boxplot(notas.nota)

