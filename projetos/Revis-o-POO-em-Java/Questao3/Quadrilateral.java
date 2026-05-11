public class Quadrilateral {
    private Point p1; // top-left
    private Point p2; // top-right
    private Point p3; // bottom-right
    private Point p4; // bottom-left

    public Quadrilateral(Point p1, Point p2, Point p3, Point p4) {
        this.p1 = p1;
        this.p2 = p2;
        this.p3 = p3;
        this.p4 = p4;
    }

    public Point getP1() { return p1; }
    public Point getP2() { return p2; }
    public Point getP3() { return p3; }
    public Point getP4() { return p4; }

    // Utilizando a fórmula de Shoelace (ou fórmula de Gauss) para calcular a área a partir das coordenadas
    public double getArea() {
        double area = 0.5 * Math.abs(
            (p1.getX() * p2.getY() - p1.getY() * p2.getX()) +
            (p2.getX() * p3.getY() - p2.getY() * p3.getX()) +
            (p3.getX() * p4.getY() - p3.getY() * p4.getX()) +
            (p4.getX() * p1.getY() - p4.getY() * p1.getX())
        );
        return area;
    }
    
    @Override
    public String toString() {
        return String.format("%s com pontos: %s, %s, %s, %s", 
            this.getClass().getSimpleName(), p1, p2, p3, p4);
    }
}
