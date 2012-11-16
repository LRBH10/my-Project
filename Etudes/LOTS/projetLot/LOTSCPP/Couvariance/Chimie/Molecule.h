
#ifndef MOLECULE_H
#define MOLECULE_H
#include "../General/Graphe.h"

#include <string>
using General::Graphe;

namespace Chimie {

class Molecule : virtual public Graphe
{
public:

  // Constructors/Destructors
  //


  /**
   * Empty Constructor
   */
  Molecule ( );

  /**
   * Empty Destructor
   */
  virtual ~Molecule ( );




};
}; // end of package namespace

#endif // MOLECULE_H
