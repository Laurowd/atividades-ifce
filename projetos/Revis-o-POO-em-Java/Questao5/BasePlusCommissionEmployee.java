public class BasePlusCommissionEmployee extends CommissionEmployee {
    private double baseSalary;

    public BasePlusCommissionEmployee(String firstName, String lastName, String cpf, double grossSales, double commissionRate, double baseSalary) {
        super(firstName, lastName, cpf, grossSales, commissionRate);
        this.baseSalary = baseSalary >= 0.0 ? baseSalary : 0.0;
    }

    public void setBaseSalary(double baseSalary) {
        this.baseSalary = baseSalary >= 0.0 ? baseSalary : 0.0;
    }

    public double getBaseSalary() { return baseSalary; }

    @Override
    public double earnings() {
        return getBaseSalary() + super.earnings();
    }

    @Override
    public String toString() {
        return String.format("Com salário-base %s; Salário-Base: R$ %.2f", super.toString(), getBaseSalary());
    }
}
