module chimie
import general

class Molecule
	super Graphe	

	redef type U : Liaison   	
	redef type V : Atome
	init
	do
		print "appel de Construct Molecule"+self.to_s
	end
end

class Liaison
	super Aret

	redef type T : Molecule   	
	redef type V : Atome

	init
	do
		print "appel de Construct Liaison"+self.to_s
	end
end

class Atome
	super Sommet

	redef type T : Molecule   	
	redef type U : Liaison

	init
	do
		print "appel de Construct Atome"+self.to_s
	end
end
