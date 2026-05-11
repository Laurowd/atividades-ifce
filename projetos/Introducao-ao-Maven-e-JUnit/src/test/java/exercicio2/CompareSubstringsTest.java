package exercicio2;

import org.junit.jupiter.api.Test;
import static org.junit.jupiter.api.Assertions.assertEquals;

public class CompareSubstringsTest {

    @Test
    public void testGetSmallestAndLargest() {
        CompareSubstrings comparador = new CompareSubstrings();
        
        // Testando com o exemplo dado no exercício
        String input = "welcometojava";
        int k = 3;
        
        String resultadoEsperado = "ava\nwel";
        String resultadoObtido = comparador.getSmallestAndLargest(input, k);
        
        // O JUnit vai verificar se o código gerou exatamente a saída "ava" e "wel"
        assertEquals(resultadoEsperado, resultadoObtido, "A menor deve ser 'ava' e a maior 'wel'");
    }
}