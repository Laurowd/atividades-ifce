package exercicio1;

import org.junit.jupiter.api.Test;

import static org.junit.jupiter.api.Assertions.assertEquals;

public class CalendarDayTest {

    @Test
    public void testFindDay() {
        CalendarDay calendar = new CalendarDay();
        
        // Teste 1: 8 de Abril de 2026 caiu em uma quarta-feira (WEDNESDAY)
        String result1 = calendar.findDay(8, 4, 2026);
        assertEquals("WEDNESDAY", result1, "O dia deveria ser WEDNESDAY");

        // Teste 2: 5 de Agosto de 2015 também caiu em uma quarta-feira
        String result2 = calendar.findDay(5, 8, 2015);
        assertEquals("WEDNESDAY", result2, "O dia deveria ser WEDNESDAY");
        
        // Teste 3: 1 de Janeiro de 2024 caiu em uma segunda-feira
        String result3 = calendar.findDay(1, 1, 2024);
        assertEquals("MONDAY", result3, "O dia deveria ser MONDAY");
    }
}