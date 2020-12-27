/**
 * Existem 3 tipos de criar uma variavel em JS
 * Pode usar a uma das palavras reservadas abaixo para isso:
 * var - para variáveis globais
 * let - para variáveis locais ( que respeitam escopo)
 * const - para variáveis imutaveis (como o valor de PI)
 */

var global = "sou global"

let local = "sou local"

const constante = "não mutavel"

global = "Mudei"

local = "Mudei"

//constante = "Não mudei" //Esta linha gera um erro no compilador

/**
 * Vale lembrar que variáveis em JS podem ser qualquer coisa (um objeto, uma função, um vetor, etc)
 */