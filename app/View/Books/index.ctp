 <h1>Books</h1>
 <table>
     <tr>
         <th>Id</th>
         <th>Title</th>
         <th>Holder</th>
     </tr>

     <!-- Here is where we loop through our books array, printing out post info -->

     <?php foreach ($books as $book): ?>
     <tr>
         <td><?php echo $book['Book']['id']; ?></td>
         <td>
             <?php echo $this->Html->link($book['Book']['title'],
 array('controller' => 'books', 'action' => 'view', $book['Book']['id'])); ?>
         </td>
         <td><?php echo $book['Book']['holder']; ?></td>
     </tr>
     <?php endforeach; ?>
     <?php unset($post); ?>
 </table>