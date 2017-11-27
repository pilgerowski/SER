package classes;

public class Municipio

{
	/** Attributes */
	private String nome;
	private UF uf;

	public Municipio() {

	}

	public void Municipio(String nome, UF uf) {
		this.setNome(nome);
		this.setUF(uf);
	}

	public void setNome(String nome) {
		this.nome = nome;
	}

	public String getNome() {
		return this.nome;
	}

	public void setUF(UF uf) {
		this.uf = uf;
	}

	public UF getUF() {
		return this.uf;
	}
}