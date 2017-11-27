package classes;

public class Categoria {
	private String nome;

	public Categoria() {
		this.setNome("");
	}

	public Categoria(String nome) {
	}

	public void setNome(String nome) {
		this.nome = nome;
	}

	public String getNome() {
		return this.nome;
	}

}
