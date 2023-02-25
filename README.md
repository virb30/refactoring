# Desafio refactoração - Fase 1

## Objetivo

Refatorar o código com o objetivo de identificar e remover code smells, melhorar 
legibilidade e praticar conceitos do SOLID e orientação a objetos

Considere escrever testes de unidade antes de começar a refatoração.

OBS: o código está feio mas funciona

### Instruções:

- Clonar o projeto
- Criar uma branch para indicar a resolução
- Alterar o arquivo correspondente (versão TS ou php) da pasta `after`
- Abrir uma PR com a sua solução

# Fase 2

## Objetivo
- Implementar uma classe (Bank) para consumir um documento (CPF e/ou CNPJ).
- O cliente dessa classe será o responsável por enviar o documento
- A classe Bank deverá ter um método `calculateFinalPrice(price)` onde:
  - para CPF deverá retornar o próprio valor e;
  - para CNPJ o valor acrescido de 20% 
- A classe Bank deverá retornar o valor total


OBS: é possível implementar todos os princípios do SOLID.
OBS2: Tente não utilizar comparações para o tipo concreto de modo a garantir o `O` do SOLID
Dica: implementar uma interface `Taxable`
