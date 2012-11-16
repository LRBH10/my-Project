#ifndef CABLE_H
#define CABLE_H
#include "General/Aret.h"
#include <string>
using General::Aret;
namespace Informatique
{
class Cable : virtual public Aret{
public:
    // Constructors/Destructors  //
    /**   * Empty Constructor   */
    Cable ( );
    /**   * Empty Destructor   */
    virtual ~Cable ( );
};
}; // end of package namespace#endif // CABLE_H
