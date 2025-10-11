// Clase Estudiante
public class Estudiante {
    // Atributos
    private String nombre;
    private int edad;
    private String matricula;

    // Constructor
    public Estudiante(String nombre, int edad, String matricula) {
        this.nombre = nombre;
        this.edad = edad;
        this.matricula = matricula;
    }

    // Método para mostrar información
    public void mostrarInfo() {
        System.out.println("Nombre: " + nombre);
        System.out.println("Edad: " + edad);
        System.out.println("Matrícula: " + matricula);
    }

    // Método para aprobar un curso
    public void aprobarCurso(String nombreCurso) {
        System.out.println(nombre + " ha aprobado el curso de " + nombreCurso + ".");
    }
}

// Clase Curso
public class Curso {
    private String nombreCurso;
    private int creditos;

    // Constructor
    public Curso(String nombreCurso, int creditos) {
        this.nombreCurso = nombreCurso;
        this.creditos = creditos;
    }

    // Método para mostrar detalles
    public void mostrarDetalles() {
        System.out.println("Curso: " + nombreCurso);
        System.out.println("Créditos: " + creditos);
    }
}

// Clase Principal
public class AppGestorEstudiantes {
    public static void main(String[] args) {
        // Crear objetos de tipo Estudiante
        Estudiante est1 = new Estudiante("Ana López", 20, "A001");
        Estudiante est2 = new Estudiante("Carlos Pérez", 22, "A002");

        // Crear objeto de tipo Curso
        Curso curso1 = new Curso("Programación Orientada a Objetos", 6);

        // Mostrar información de los estudiantes y curso
        est1.mostrarInfo();
        curso1.mostrarDetalles();
        est1.aprobarCurso(curso1.nombreCurso);

        System.out.println("--------------------------");

        est2.mostrarInfo();
        curso1.mostrarDetalles();
        est2.aprobarCurso(curso1.nombreCurso);
    }
}