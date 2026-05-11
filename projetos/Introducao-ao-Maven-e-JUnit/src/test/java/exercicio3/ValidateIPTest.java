package exercicio3;

import org.junit.jupiter.api.Test;
// Importamos o assertTrue e o assertFalse para testar o retorno booleano
import static org.junit.jupiter.api.Assertions.assertTrue;
import static org.junit.jupiter.api.Assertions.assertFalse;

public class ValidateIPTest {

    @Test
    public void testValidIPs() {
        ValidateIP validator = new ValidateIP();
        
        // Todos esses devem retornar TRUE
        assertTrue(validator.validate("192.168.1.1"), "O IP 192.168.1.1 é válido");
        assertTrue(validator.validate("0.0.0.0"), "O IP 0.0.0.0 é válido");
        assertTrue(validator.validate("255.255.255.255"), "O IP 255.255.255.255 é válido");
        assertTrue(validator.validate("10.0.0.50"), "O IP 10.0.0.50 é válido");
    }

    @Test
    public void testInvalidIPs() {
        ValidateIP validator = new ValidateIP();
        
        // Todos esses devem retornar FALSE
        assertFalse(validator.validate("256.255.255.255"), "256 está acima do limite de 255");
        assertFalse(validator.validate("192.168.1"), "Falta um bloco numérico");
        assertFalse(validator.validate("192.168.1.1.1"), "Tem um bloco a mais");
        assertFalse(validator.validate("abc.def.ghi.jkl"), "Letras não são permitidas");
        assertFalse(validator.validate("192.168.01.1"), "Zeros à esquerda (01) não são permitidos no padrão estrito");
        assertFalse(validator.validate(null), "Valores nulos não devem quebrar o código");
    }
}