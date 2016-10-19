Diversificação e Intensificação em algoritmos evolutivos
--------------------------------------------------------

Jean Carlo Machado e Renato Bustamante

Tema geral
----------

Clarificar o papel de cada operador no processo de
intensificação e diversificação.

Argumenta que não é simples manter o balanço entre diversificação
intensificação, principalmente porque o controle é indireto em EA's.

Como os componentes de EA contribuem para diversificação e
intensificação.

Quando e como diversificação e intensificação são controlados.

Como o balanço entre diversificação e intensificação ocorre.

EAs abordados
-------------

- Algoritmos Genéticos (AG)
- Estratégias evolucionárias (ES)
- Programação evolucionária (EP)
- Programação genética (GP)

Defende o uso de várias estratégias entre subpopulações.

Nenhuma é definitivamente melhor (no free lunch).

Operadores de diversificação e intensificação
---------------------------------------------

- Mutação: tende a  diversificação;
- Seleção: é em sua maior parte um operador de intensificação;
- Crossover: tende a intensificação;

A linha entre exploração e intensificação não é clara.

Tamanho da população e representação dos indivíduos tem grande
impacto na diversificação e intensificação.

Crossover uniforme é melhor para populações pequenas, já em
populações grandes o oposto é verdadeiro.

Parâmetros
----------

Geralmente os parâmetros recomendados na literatura não levam as
melhores soluções para casos particulares (no free lunch).

EA's sem parâmetros são mais robustos mas menos eficientes.

Problemas diferentes requerem níveis de diversificação e
intensificação diferentes.

Classificações citadas
----------------------

- Curtas (estocástico)/ longas (intensificação,diversificação)
- Único processo / Múltiplos processos

Esquemas de controle de parâmetros
----------------------------------

- Determinístico: quando executar N gerações
- Adaptativo: quando algum fator pre-determinado é alcançado, quando o fitness não melhorou por várias gerações
- Automático: dependendo do estado do resultado atual

Diversidade
-----------

A nível de genótipo ou fenótipo ou uma combinação de ambos.

*Localidade*: informa o quão bem genótipos próximos informam
fenótipos próximos.

Algoritmos eficientes tendem a ter uma alta localidade.


Medidas de diversidade de genótipo
----------------------------------

- Baseado na diferença;
- Baseado na distancia;
- Baseado em entropia;
- Baseado em probabilidade;
- Baseado em ancestrais;

Medidas de diversidade de fenótipos
-----------------------------------

- Baseado na diferença;
- Baseado na distancia;
- Baseado em entropia;
- Baseado em probabilidade;

Balanceando entre diversificação e intensificação
=================================================

Manutenção de diversidade
-------------------------

Com e sem nichos. Com nichos é capaz de encontrar múltiplos
ótimos.

###  Métodos de nicho

- Baseado em fitness;
- Baseado em troca;
- Baseado em preservação;
- Híbrido;

Controle de diversidade
-----------------------

Difere da manutenção de diversidade pois leva em consideração o valor de fitness.

- Controle de diversidade através de seleção;
- Controle de diversidade através crossover e mutação;
- Controle de diversidade através de mudança na população;

### Aprendizado de diversidade

Leva em consideração todo o histórico da busca.


Métodos diretos
----------------

Possibilita  medir diretamente diversificação e
intensificação.

- Sub-populações para fases de otimização
- Troca de fases dada ocorrência de eventos
- Baseado em ancestral


Trabalhos futuros
-----------------

- Definições formais que levam em consideração as dependências dos
problemas;
- Clarificar o papel dos operados em métodos multi-processo e único
processo;
- Descobrir boas proporções entre exploração e intensificação;
- Clarificar os relacionamentos entre a representação do indivíduo
  e o processo de  intensificação e diversificação;

Referências
-----------

- Exploration and Exploitation in Evolutionary Algorithms: A survery, Matej Crepinsek, 2013
