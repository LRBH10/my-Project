
#ifndef ATOME_H
#define ATOME_H
#include "General/Sommet.h"

#include <string>
using General::Sommet;

namespace Chimie {

class Atome : virtual public Sommet
{
public:

  // Constructors/Destructors
  //


  /**
   * Empty Constructor
   */
  Atome ( );

  /**
   * Empty Destructor
   */
  virtual ~Atome ( );




};
}; // end of package namespace

#endif // ATOME_H
