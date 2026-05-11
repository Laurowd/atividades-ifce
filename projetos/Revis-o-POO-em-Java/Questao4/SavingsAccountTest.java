public class SavingsAccountTest {
    public static void main(String[] args) {
        SavingsAccount saver1 = new SavingsAccount(2000.00);
        SavingsAccount saver2 = new SavingsAccount(3000.00);

        SavingsAccount.modifyInterestRate(0.04); // 4% = 0.04

        System.out.println("Saldos com taxa de juros de 4% ao longo de 12 meses:");
        System.out.printf("%-6s %-12s %-12s\n", "Mês", "Saver 1", "Saver 2");
        for (int i = 1; i <= 12; i++) {
            saver1.calculateMonthlyInterest();
            saver2.calculateMonthlyInterest();
            System.out.printf("%-6d R$ %-9.2f R$ %-9.2f\n", i, saver1.getSavingsBalance(), saver2.getSavingsBalance());
        }

        SavingsAccount.modifyInterestRate(0.05); // 5% = 0.05
        
        System.out.println("\nCalculando o próximo mês com taxa de juros de 5%:");
        saver1.calculateMonthlyInterest();
        saver2.calculateMonthlyInterest();
        System.out.printf("Mês 13 Saver 1: R$ %.2f\n", saver1.getSavingsBalance());
        System.out.printf("Mês 13 Saver 2: R$ %.2f\n", saver2.getSavingsBalance());
    }
}
