public class CommissionEmployee extends Employee {
    private double grossSales;
    private double commissionRate;

    public CommissionEmployee(String firstName, String lastName, String cpf, double grossSales, double commissionRate) {
        super(firstName, lastName, cpf);
        this.grossSales = grossSales >= 0.0 ? grossSales : 0.0;
        this.commissionRate = (commissionRate > 0.0 && commissionRate < 1.0) ? commissionRate : 0.0;
    }

    public void setGrossSales(double grossSales) {
        this.grossSales = grossSales >= 0.0 ? grossSales : 0.0;
    }

    public double getGrossSales() { return grossSales; }

    public void setCommissionRate(double commissionRate) {
        this.commissionRate = (commissionRate > 0.0 && commissionRate < 1.0) ? commissionRate : 0.0;
    }

    public double getCommissionRate() { return commissionRate; }

    @Override
    public double earnings() {
        return getCommissionRate() * getGrossSales();
    }

    @Override
    public String toString() {
        return String.format("Empregado Comissionado: %s\nVendas Brutas: R$ %.2f; Taxa de Comissão: %.2f", super.toString(), getGrossSales(), getCommissionRate());
    }
}
