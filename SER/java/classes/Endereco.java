package classes;

public class Endereco

{
	/** Attributes */
	private String rua;
	private String numero;
	private String complemento;
	private boolean ehPrincipal;
	private Municipio municipio;

	public Endereco() {
	}

	public Endereco(String rua, String numero, String complemento,
			boolean ehPrincipal, Municipio municipio) {
		this.setRua(rua);
		this.setNumero(numero);
		this.setComplemento(complemento);
		this.setEhPrincipal(ehPrincipal);
		this.setMunicipio(municipio);
	}

	public void setRua(String rua) {
		this.rua = rua;
	}

	public String getRua() {
		return this.rua;
	}

	public void setNumero(String numero) {
		this.numero = numero;
	}

	public String getNumero() {
		return this.numero;
	}

	public void setComplemento(String complemento) {
		this.complemento = complemento;
	}

	public String getComplemento() {
		return this.complemento;
	}

	public void setEhPrincipal(boolean ehPrincipal) {
		this.ehPrincipal = ehPrincipal;
	}

	public boolean getEhPrincipal() {
		return this.ehPrincipal;
	}

	public void setMunicipio(Municipio municipio) {
		this.municipio = municipio;
	}

	public Municipio getMunicipio() {
		return this.municipio;
	}
}
