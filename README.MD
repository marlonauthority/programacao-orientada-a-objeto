#Orientação a objeto em PHP

##Como era?

1. Programação Baixo Nível
2. Programação Linear
3. Programação Estruturada
4. POO


##Criador?
Alan Kay

##Vantagens?

`C - Confiável` = O Isolamento entra as partes gera software seguro. Ao  alterar uma parte, nenhuma outra é afetada.

`O - Oportuno` = Ao dividir tudo em partes, várias delas podem ser desenvolvidas em paralelo.

`M - Manutenível` = Atualizar um software é mais fácil. Uma pequena modificação vai beneficiar toas as partes que usarem o objeto.

`E - Extensível`  = O software não é estático. Ele deve crescer para permanecer útil.

`R - Reutilizável` = Podemos usar objetos de um sistema que criamos em outro sistema futuro.

`N - Natural` = Mais fácil de entender. Você se preocupa mais na funcionalidade do que nos detalhes de implementação.

## OBJETO
Coisa material ou abstrata que pode ser percebida pelos sentidos e descrita por meio das suas *características*, *comportamentos* e *estado atual*.

Todo objeto tem:
* Atributos
* Métodos
* Estado

## CLASSE
Define os atributos e métodos comuns que serão compartilhados por um objeto.

> A definição correta ao criar um objeto é *instanciar* de uma classe.

### Modificadores de Visibilidade
Indicam o nível de acesso aos componentes internos de uma classe.
* + publico - A classe atual e todas as outras classes.
* - privado - Somente a classe atual.
* # protegido - A classe atual e todas as suas sub-classes


## MÉTODOS ESPECIAIS
* Métodos Acessôres - Getters
* Métodos Modificadores - Setters
* Método Construtor - Construct


### TOME NOTA
. Classe seria a receita do bolo.

. Objeto seria o bolo pronto.

. Atributos seriam os ingredientes do bolo.

. A setinha "->" se chama operador objeto.

. Método basicamente é a função criada dentro da classe.

. Abstração - Abstrair é considerar somente aquilo que lhe importa em um determinado momento de uma programação.

. Objetos são Instâcias de Classes.


## Pilares do POO
* Encapsulamento - Ocultar partes independentes da implementação, permitindo construir partes invísiveis ao mundo exterior.
  Vantagens:
  * Tornar mudanças invisíveis
  * Facilitar a reutilização do código
  * Reduzir efeitos colaterais



* Herança - Permite basear uma nova classe na definição de uma outra classe previamente existente. Ela é aplicada tanto para as características quanto para os comportamentos.

  * Classe Abstrata - Não pode ser instanciada. Só pode servir como progenitora. (Não gera objetos).
  * Método Abstrato - Declarado, mas não implementado na progenitora. "Só pode ser usado em uma interface ou uma classe abstrata". (Só pode ser usado em uma interface ou classe abstrata).
  * Classe final - Não pode ser herdada por outra classe. Obrigatoriamente folha. (Não pode ter filhos).
  * Método final - Não pode ser sobrescrito pelas suas sub-classes. Obrigatoriamente herdado. (Não pode ser sobreposto).

* Polimorfismo
  * Permite que um mesmo nome represente vários comportamentos diferentes.
    - POLI -> Muitas
    - MORFO -> Formas
      - Muitas Formas de se fazer determinada "coisa".

  * Assinatura do Métodos - Quantidade e os tipos dos parâmetros.

  #### Tipos:
  * Sobreposição - Ocorre quando os métodos possuem a mesma assinatura e classes diferentes.
  * Sobrecarga - Ocorre quando os métodos possuem assinaturas diferentes e mesma classe. (Não suportado no PHP).
