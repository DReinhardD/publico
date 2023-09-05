# -*- coding: utf-8 -*-
"""Introdução a data Science.ipynb

Automatically generated by Colaboratory.

Original file is located at
    https://colab.research.google.com/drive/1Sa_72qY_cWquQ-H-fuBG-9l12VGzumG7

# Analisando as notas em Geral
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

"""# Olhando os filmes"""

filmes = pd.read_csv("movies.csv")
filmes.columns = ["filmeiD", "titulo", "generos"]
filmes.head()

notas.head()

"""# Analisando algumas notas especificas por filme"""

notas.query("filmeId==1").nota.mean()

notas.query("filmeId==2").nota.mean()

medias_por_filme = notas.groupby("filmeId").mean().nota
medias_por_filme.head()

medias_por_filme.plot(kind='hist')

import matplotlib.pyplot as plt

plt.figure(figsize=(5,8))
sns.boxplot(y=medias_por_filme)

medias_por_filme.describe()

sns.distplot(medias_por_filme)

import matplotlib.pyplot as plt

plt.hist(medias_por_filme)
plt.title("Histograma das médias dos filmes")

tmdb = pd.read_csv("tmdb_5000_movies.csv")
tmdb.head()

tmdb.original_language.unique()

