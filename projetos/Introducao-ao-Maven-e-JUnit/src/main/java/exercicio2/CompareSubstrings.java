package exercicio2;

public class CompareSubstrings {

    public String getSmallestAndLargest(String s, int k) {
        // Inicializamos a menor e a maior com a primeira substring possível
        String smallest = s.substring(0, k);
        String largest = s.substring(0, k);
        
        // O laço percorre a string. O limite é s.length() - k para não dar erro de "IndexOutOfBounds"
        for (int i = 1; i <= s.length() - k; i++) {
            // Extrai a substring atual de tamanho k
            String current = s.substring(i, i + k);
            
            // compareTo retorna negativo se 'current' vier ANTES no dicionário
            if (current.compareTo(smallest) < 0) {
                smallest = current;
            }
            
            // compareTo retorna positivo se 'current' vier DEPOIS no dicionário
            if (current.compareTo(largest) > 0) {
                largest = current;
            }
        }
        
        // Retorna a menor e a maior separadas por uma quebra de linha, igual ao exemplo
        return smallest + "\n" + largest;
    }
}