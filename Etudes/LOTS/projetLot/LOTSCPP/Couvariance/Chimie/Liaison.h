
#ifndef LIAISON_H
#define LIAISON_H
#include "General/Aret.h"

#include <string>
using General::Aret;

namespace Chimie {

class Liaison : virtual public Aret
{
public:

  // Constructors/Destructors
  //


  /**
   * Empty Constructor
   */
  Liaison ( );

  /**
   * Empty Destructor
   */
  virtual ~Liaison ( );




};
}; // end of package namespace

#endif // LIAISON_H
