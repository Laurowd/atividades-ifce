package exercicio3;

public class ValidateIP {

    public boolean validate(String ip) {
        // Se a string for nula, já sabemos que é inválida
        if (ip == null) {
            return false;
        }

        /* * Explicando o Regex para um número de 0 a 255:
         * [0-9]           -> Um dígito de 0 a 9
         * [1-9][0-9]      -> Dois dígitos de 10 a 99
         * 1[0-9][0-9]     -> Três dígitos de 100 a 199
         * 2[0-4][0-9]     -> Três dígitos de 200 a 249
         * 25[0-5]         -> Três dígitos de 250 a 255
         */
        String bloco0a255 = "([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])";
        
        /*
         * O padrão completo:
         * ^               -> Indica o começo da String
         * (bloco\\.){3}   -> O bloco de 0-255 seguido de um ponto, repetido 3 vezes
         * bloco           -> O último bloco de 0-255 (sem o ponto no final)
         * $               -> Indica o final da String
         */
        String regexIPv4 = "^(" + bloco0a255 + "\\.){3}" + bloco0a255 + "$";

        // O método .matches() do Java compara a String com a regra de Regex e retorna true ou false
        return ip.matches(regexIPv4);
    }
}