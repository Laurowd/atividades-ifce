public class QuadrilateralTest {
    public static void main(String[] args) {
        // Trapezoid
        Point t1 = new Point(1, 4), t2 = new Point(4, 4), t3 = new Point(5, 1), t4 = new Point(0, 1);
        Trapezoid trap = new Trapezoid(t1, t2, t3, t4);

        // Parallelogram
        Point p1 = new Point(1, 4), p2 = new Point(5, 4), p3 = new Point(4, 1), p4 = new Point(0, 1);
        Parallelogram param = new Parallelogram(p1, p2, p3, p4);

        // Rectangle
        Point r1 = new Point(1, 4), r2 = new Point(5, 4), r3 = new Point(5, 1), r4 = new Point(1, 1);
        Rectangle rect = new Rectangle(r1, r2, r3, r4);

        // Square
        Point s1 = new Point(1, 4), s2 = new Point(4, 4), s3 = new Point(4, 1), s4 = new Point(1, 1);
        Square sq = new Square(s1, s2, s3, s4);

        System.out.println(trap + " | Área: " + trap.getArea());
        System.out.println(param + " | Área: " + param.getArea());
        System.out.println(rect + " | Área: " + rect.getArea());
        System.out.println(sq + " | Área: " + sq.getArea());
    }
}
