package classes;

public class UF

{
	private String nome;
	private String sigla;

	public UF(String nome, String sigla) {
		this.setNome(nome);
		this.setSigla(sigla);

	}

	public void setNome(String nome) {
		this.nome = nome;
	}

	public String getNome() {
		return this.nome;
	}

	public void setSigla(String sigla) {
		this.sigla = sigla;
	}

	public String getSigla() {
		return this.sigla;

	}
	
	public String toString() {
		return nome + " (" + sigla + ")";
	}
}