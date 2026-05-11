public abstract class Employee {
    private String firstName;
    private String lastName;
    private String cpf;

    public Employee(String firstName, String lastName, String cpf) {
        this.firstName = firstName;
        this.lastName = lastName;
        this.cpf = cpf;
    }

    public String getFirstName() { return firstName; }
    public void setFirstName(String firstName) { this.firstName = firstName; }
    
    public String getLastName() { return lastName; }
    public void setLastName(String lastName) { this.lastName = lastName; }
    
    public String getCpf() { return cpf; }
    public void setCpf(String cpf) { this.cpf = cpf; }

    @Override
    public String toString() {
        return String.format("%s %s\nCPF: %s", firstName, lastName, cpf);
    }

    public abstract double earnings(); // Método abstrato para calcular o ganho   
}
